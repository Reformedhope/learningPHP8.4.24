<?php
class Reservation{
    private $host = 'Host Class';//Host class
    private $guest = 'Guest class';//Guest class

    public function cancel(){


        //calling the other methods from the public method. 
        $this->sendCancelNotification();
        $this->refundGuest();
        echo"and a load of other stuff that you dont need to know about";
        // check wheather cancellation is an option
        //refund the guest.. if refunds applicable[Guest]
        //make the room available again[Room]
        //notify the host[Host]
            //in app notification[Notification]
            //send them an email/SMS [EMAIL, SMS]
        //send confirm to guest[Email, SMS]

    }

    private function sendCancelNotification(){
        echo 'Sending notification to '. $this-> host . '</br>'; 
    }

    private function refundGuest(){

        echo 'Refunding ' . $this->guest . '</br>';

    }






}

?>