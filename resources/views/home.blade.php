<?php

use App\Models\Tomproducts;
 
foreach (Tomproducts::all() as $flight) {
    echo $flight->name;
}