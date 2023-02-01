<?php


use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function admin_routes(){
        $respone = $this->get('/admin');

        $respone->assertStatus(200);
    }
}
