<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    /**
     * @param Request $request
     * @return array
     */
    public function getRequest(Request $request)
    {
        return $request->all();
    }

    /**
     * @param Request $request
     * @return array
     */
    public function postRequest(Request $request)
    {
        return $request->all();
    }

    /**
     * @param Request $request
     * @return array
     */
    public function putRequest(Request $request)
    {
        return $request->all();
    }

    /**
     * @param Request $request
     * @return array
     */
    public function patchRequest(Request $request)
    {
        return $request->all();
    }

    /**
     * @param Request $request
     * @return array
     */
    public function deleteRequest(Request $request)
    {
        return $request->all();
    }
}
