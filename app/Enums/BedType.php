<?php

namespace App\Enums;

enum BedType:string
{
  case Single = 'single';
  case Double = 'double';
  case Queen = 'queen';
  case King = 'king';
}