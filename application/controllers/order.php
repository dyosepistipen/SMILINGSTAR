<?php include("securearea.php"); ?>
<?php include("cart.php"); ?>
<?php

class Order extends Securearea {
  public $oCart;

  function __construct() {
    parent::__construct();
    $this->load->helper("url");
    $this->load->model("User_model");
    $this->load->model("admin/areas_model");
    $this->load->model("admin/order_model");
    $config['protocol'] = "smtp";
    $config['smtp_host'] = "ssl://smtp.mail.yahoo.com";
    $config['smtp_user'] = "stephenmilanes15@yahoo.com";
    $config['smtp_pass'] = "istifen152831";
    $config['smtp_port'] = "465";
    $config['charset'] = "utf-8";
    $config['newline'] = "\r\n";
    $config['crlf'] = "\r";
    $config['mailtype'] = 'html';
    $config['wordwrap'] = TRUE;
    $this->load->library('email', $config);

    $this->oCart = new Cart();
  }

  function index() {
    $this->showOrder();
  }

  function showOrder() {
    //load header
    $this->loadHeader($this);

    //load sidebar
    $this->loadSidebar($this);

    //load middle content
    $view['obj'] = $this;
    $view["areas"] = $this->areas_model->getAreas("", "area_name,area_pin");
    $view['cartData'] = $this->oCart->getcurrentcart(TRUE);
    if (empty($view['cartData']))
      redirect(base_url(), "refresh");
    $view['userdata'] = $this->userData;
    $this->load->view('order_view', $view);

    //load footer
    $this->loadFooter($this);
  }

  function placeOrder() {
    if (empty($_POST)) redirect(base_url() . "order", "refresh");
    $this->load->library('form_validation');
    $config = array(
      array(
        'field' => 'shippingaddress',
        'label' => 'Shipping Address',
        'rules' => 'trim|required'
      ),
      array(
        'field' => 'shipping_area',
        'label' => 'Shipping Area',
        'rules' => 'trim|required'
      ),
      array(
        'field' => 'shipping_PIN',
        'label' => 'Shipping Postal Code',
        'rules' => 'trim'
      ),
      array(
        'field' => 'customer_id',
        'label' => 'Customer ID',
        'rules' => 'trim|required'
      ),
      array(
        'field' => 'recieving_date',
        'label' => 'Recieving Date',
        'rules' => 'trim|required'
      ),
    );
    $this->form_validation->set_rules($config);
    if ($this->form_validation->run() == FALSE) {
      echo "false";
      $this->showOrder();
      $this->session->set_flashdata("alert", json_encode(array("type" => "block", "msg" => "<strong>Please Re-Check your Form.</strong>")));
    } else {
      $orderData = $_POST;
      $orderData["recieving_date"] = str_replace("/", "-", $orderData["recieving_date"]);
      $mer = (intval($orderData["recieving_time"]) >= 10 && intval($orderData["recieving_time"]) <= 12) ? "AM" : "PM";
      $orderData["order_date_time"] = $orderData["recieving_time"] . " " . $mer . " " . $orderData["recieving_date"];
      unset($orderData["recieving_time"]);
      unset($orderData["recieving_date"]);
      $orderData["order_date_time"] = date("Y-m-d H:m:s", strtotime($orderData["order_date_time"]));
      $cartcontent = $this->cart->contents();
      if (empty($cartcontent)) redirect(base_url());
      $orderData["cart_data"] = serialize($cartcontent);
      $this->order_model->placeOrder($orderData);
      //TODO: send email

      $customer = $this->User_model->getUserByID($orderData['customer_id']);
      $this->email->from('stephenmilanes15@yahoo.com', 'Admin');
      $this->email->to($customer[0]['email']);
      $this->email->subject('Order Details');
      $data = array('orderData' => $orderData);
      $msg = $this->load->view('email', $data, true);

      $this->email->message($msg);
      $this->email->send();

      $this->session->set_flashdata("alert", json_encode(array("type" => "success", "msg" => "<strong>Your Order is placed Successfully Please Check your email for more details.</strong>")));
      //load header
      $this->loadHeader($this);

      //load sidebar
      $this->loadSidebar($this);

      //load middle content
      $view['obj'] = $this;
      $this->load->view("placed_order_view", $orderData);


      //load footer
      $this->loadFooter($this);
      $this->oCart->removeCart();
    }
  }
}

?>