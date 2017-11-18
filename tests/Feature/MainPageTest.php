<?php

class MainPageTest extends TestCase
{
    /** @test */
    public function the_http_response_should_contain_yes_or_no_answer()
    {
        $this->get('/');
        $this->assertResponseStatus(200);
        $this->assertRegExp('/TAK|NIE/', $this->response->getContent());
    }
}
