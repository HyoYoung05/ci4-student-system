<?php
namespace App\Models;
use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'course'];
    
    // Enabling timestamps now will make Step 9 (Soft Deletes) easier later!
    protected $useTimestamps = true; 
}