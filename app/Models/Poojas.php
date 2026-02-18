<?php

namespace App\Models;

use CodeIgniter\Model;

class Poojas extends Model
{
    protected $table            = 'pooja';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['name','slug','inclusions','price','samagri_price','duration_minutes','full_desc','samagri_included','languages','pooja_type', 'languages', 'samagri_included', 'samagri_list', 'market_price', 'pooja_description', 'significance', 'meta_title', 'meta_description', 'meta_keywords', 'status', 'created_at', 'updated_at'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];


public function get_poojas()
{
    $db = \Config\Database::connect();

    // 1️⃣ Get all active poojas
    $poojas = $db->table('pooja')
        ->where('status', 1)
        ->get()
        ->getResultArray();

    if (empty($poojas)) {
        return [];
    }

    $poojaIds = array_column($poojas, 'id');

    // 2️⃣ Get ALL images for these poojas
    $images = $db->table('pooja_images')
        ->whereIn('pooja_id', $poojaIds)
        ->orderBy('is_thumbnail', 'DESC')
        ->orderBy('id', 'ASC')
        ->get()
        ->getResultArray();

    // 3️⃣ Get ALL FAQs for these poojas
    $faqs = $db->table('pooja_faqs')
        ->whereIn('pooja_id', $poojaIds)
        ->orderBy('id', 'ASC')
        ->get()
        ->getResultArray();

    // 4️⃣ Index images by pooja_id
    $imagesByPooja = [];
    foreach ($images as $img) {
        $imagesByPooja[$img['pooja_id']][] = $img;
    }

    // 5️⃣ Index faqs by pooja_id
    $faqsByPooja = [];
    foreach ($faqs as $faq) {
        $faqsByPooja[$faq['pooja_id']][] = $faq;
    }

    // 6️⃣ Attach relations
    foreach ($poojas as &$pooja) {
        $pooja['images'] = $imagesByPooja[$pooja['id']] ?? [];
        $pooja['faqs']   = $faqsByPooja[$pooja['id']] ?? [];
    }

    return $poojas;
}

}
