<?php
namespace App\Models;
use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'course'];
    
    // Enable timestamps to automatically manage created_at and updated_at
    protected $useTimestamps = true; 
    
    // Enable Soft Deletes
    protected $useSoftDeletes = true; // [cite: 98, 100]
}