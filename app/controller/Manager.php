<!-- ManagerDashboard -->
<?php
defined('ROOTPATH') or exit('Access denied');

class Manager {
    use controller;
    public function index() {
        $this->view('manager/dashboard');
    }

    public function dashboard() {
        $this->view('manager/dashboard');
    }

    public function profile() {
        $this->view('manager/profile');
    }

    public function managementHome(){

        switch(strtolower(URL(2))){
            case 'propertymanagement':
                $this->propertyManagement();
                break;
            case 'employeemanagement':
                $this->employeeManagement();
                break;
            case 'agentmanagement':
                $this->agentManagement();
                break;
            case 'financialmanagement':
                $this->financialManagement();
                break;
            default:
                $this->view('manager/managementHome');
                break;
        }
    }

    public function propertyManagement(){
        // show(URL(3));
        switch(strtolower(URL(3))){
            case 'assignagents':
                $this->assignAgents();
                break;
            case 'requestapproval':
                $this->requestApproval();
                break;
            default:
                $this->view('manager/propertymanagement');
                break;
        }
    }

    public function employeeManagement(){
        $this->view('manager/employeeManagement');
    }

    public function requestApproval(){
        $this->view('manager/requestApproval');
    }

    public function financialManagement(){
        $this->view('manager/financialManagement');
    }

    public function assignAgents(){
        $this->view('manager/assignagents');
    }

    public function agentManagement(){
        $this->view('manager/agentManagement');
    }

    
}
