<?php

use Illuminate\Support\Facades\Schedule;

Schedule::command('abuseip:update')->daily();
