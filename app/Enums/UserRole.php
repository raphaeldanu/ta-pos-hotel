<?php

namespace App\Enums;

enum UserRole:string
{
  case FrontOfficeStaff = 'fo_staff';
  case FrontOfficeSupervisor = 'fo_supervisor';
  case KitchenStaff = 'fb_staff';
  case KitchenSupervisor = 'fb_supervisor';
  case HouseKeepingStaff = 'hk_staff';
  case HouseKeepingSupervisor = 'hk_supervisor';
}