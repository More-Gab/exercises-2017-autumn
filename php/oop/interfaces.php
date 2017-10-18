<?php

interface UserInterface
{
    public function getUsername();

    public function setUsername(string $username);
}

class FacebookUser implements UserInterface
{
    protected $username = null;

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername(string $username)
    {
        $this->username = $username;
    }
}

class TwitterUser implements UserInterface
{
    public function getUsername()
    {
        return 'Tweety';
    }

    public function setUsername(string $username)
    {
        // do nothing
    }
}

function print_user_username(UserInterface $user)
{
    // we can rely on the object $user having a method getUsername
    // because to make it into this function it must implement
    // the UserInterface interface
    echo $user->getUsername();
}

$fb_user = new FacebookUser();
$fb_user->setUsername('Roger');
print_user_username($fb_user);

$tw_user = new TwitterUser();
print_user_username($tw_user);