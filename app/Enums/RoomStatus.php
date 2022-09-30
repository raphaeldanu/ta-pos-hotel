<?php

namespace App\Enums;

enum RoomStatus:string
{
  case VacantDirty = 'vd';
  case VacantClean = 'vc';
  case Occupied = 'oc';
  case Booked = 'bo';
}