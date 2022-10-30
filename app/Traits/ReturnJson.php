<?php

namespace App\Traits;

trait ReturnJson
{

    public function requestFails($errors)
    {
        $arrErrors = $errors;
        if (!is_array($errors)) {
            $arrErrors = [$errors];
        }
        return response()->json(['success' => false, 'status' => null, 'errors' => $arrErrors, 'data' => null], 422);
    }

    public function requestSuccess($message = null, $data = null)
    {
        return response()->json(['success' => true, 'status' => $message, 'errors' => null, 'data' => $data], 200);
    }

}


