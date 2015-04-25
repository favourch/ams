<?php
/**
 * Created by PhpStorm.
 * User: Babajide Owosakin
 * Date: 2/25/2015
 * Time: 7:50 AM
 */

class DashboardController extends BaseController{

    public static $asset_status = array(
        0 => 'Deployed',
        1 => 'Requestable',
        3 => 'Checked out',
        4 => 'Undeployable'
    );

    public function __construct(){
        parent::__construct();
        $this->beforeFilter('crsf', array('on' => 'post'));
        $this->beforeFilter('auth', array('on' => array('index')));
    }

    public function index(){
        //Opens the dashboard after user login
        if(Session::has('user')){
            // get the number of hardware assets from the database
            $ha_total = DB::table('hardware_assets')->count();
            // get the number of software assets from the database
            $sa_total = DB::table('software_assets')->count();
            //Get available hardware assets
            $ha_available = DB::table('hardware_assets')->where('status', '=', '1')->count();
            // Gets available software assets
            $sa_available = DB::table('software_assets')->where('status', '=', '1')->count();

            return View::make('dashboard', array('stats' => array('ha_total' => $ha_total, 'sa_total' => $sa_total, 'ha_available' => $ha_available, 'sa_available' => $sa_available)));
        }else{
            return Redirect::to('/');
        }

    }

    public function newUserForm(){
        //Renders new user form
        if(Session::has('user')){
            $group_options = DB::table('groups')->orderBy('group_name', 'asc')->lists('group_name', 'group_id');
            return View::make('new_user', array('group_options' => $group_options));
        }else{
            return Redirect::to('/');
        }
    }


    public function newHardwareAssetForm(){
        //Renders new user form
        if(Session::has('user')){
            $user_options = DB::table('users')->orderBy('username', 'asc')->lists('username', 'user_id');
            $supplier_options = DB::table('suppliers')->orderBy('supplier_name', 'asc')->lists('supplier_name', 'supplier_id');
            $location_options = DB::table('locations')->orderBy('location_name', 'asc')->lists('location_name', 'location_id');
            return View::make('new_hardware_asset', array('supplier_options' => $supplier_options, 'user_options' => $user_options, 'location_options' => $location_options, 'status' => DashboardController::$asset_status));
        }else{
            return Redirect::to('/');
        }
    }

} 