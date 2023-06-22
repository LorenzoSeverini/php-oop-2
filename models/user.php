<!-- ciao user  -->
<?php

class User
{
    private $name;
    private $email;
    private $isRegistered;
    private $avatar;

    public function __construct($name, $email, $isRegistered = false, $avatar = null)
    {
        $this->name = $name;
        $this->email = $email;
        $this->isRegistered = $isRegistered;
        $this->avatar = $avatar;
    }

    public function register()
    {
        $this->isRegistered = true;
    }

    public function getDiscountedTotal($total)
    {
        if ($this->isRegistered) {
            return $total * 0.8; // Apply 20% discount
        }

        return $total;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    // getAvatar
    public function getAvatar()
    {
        return $this->avatar;
    }
}
