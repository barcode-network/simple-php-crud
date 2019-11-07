<?php
/**
 * Create the registration page and functionality for the
 * vehicle registration system
 */

 require 'config.php';
 require 'classes/Page.php';
 require 'classes/Model.php';
 require 'classes/AbstractView.php';
 require 'classes/Registration.php';
 require 'classes/Validator.php';

 // create the registration page object
 $registration = new Registration;
 // view indicates the HTML file to use and display
 $view = $registration->makeView();
 $model = $registration->makeModel();

//  die('Trying something');

 // check to see if the user has posted data to the form
 if (empty($_POST)) {
     $view->setTemplate('registration.tpl.php');
     $view->display();
 }
 // data was posted so we must do the following
else {

    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
    // exit;
    // 1. Validate the data if JavaScript didn't do it
    // if (!isset($_POST['validation_done_by_js']) ||
    //     (isset($_POST['validation_done_by_js']) && (!$_POST['validation_done_by_js']))) {

        if(isset($_POST['registerBtn'])){

            // die('submitted');
            // $validator = new Validator($_POST);
            // $result = $validator->validate();
            $result = true;
        // 2. If the data is invalid, get and display error messages
            if (!$result) { // validation failed, errors were generated
                // $errors = $validator->getErrors();  // an array of strings
                
                // print_r($errors);
                
                $view->setTemplate('registration.tpl.php');
                // $view->addVar('errors', $errors);
                $view->display();
            }
        // 3. If the data is valid, update the database and go to next page
            else { 
                $model->add('citizen', $_POST);
                header('Location:process.php');
            }
    }
    
   
}

 // model stores all of our database queries
 // $model = $registration->makeModel();
 
 // set the template file to use
 // $view->setTemplate('registration.html');
 // $view->display();