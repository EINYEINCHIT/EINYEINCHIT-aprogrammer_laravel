<?php

function flash($message)
{
    session()->flash("success", $message);
}