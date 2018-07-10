<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('theme_options', 'Theme Options')
         ->add_fields(array(
	         Field::make('text', 'cf_phone'),
	         Field::make('text', 'cf_email'),
	         Field::make('text', 'cf_time_first'),
	         Field::make('text', 'cf_time_last')
         ));
