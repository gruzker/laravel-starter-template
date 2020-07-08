<?php

it('testing homepage')
    ->get('/')
    ->assertSee('Market')
    ->assertStatus(200);

