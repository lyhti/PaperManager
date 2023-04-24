<?php

namespace App\Http\Controllers\Document;

use App\Http\Controllers\Controller;
use App\Models\DocumentType;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class DocumentTypeController extends Controller {
    public function getDocType() {
        return DocumentType::joinTypeEmploy()->get();
    }
}
