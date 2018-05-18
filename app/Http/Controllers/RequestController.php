<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getRequest(Request $request)
    {
        return response()->json([
            'host' => $request->getHost(),
            'port' => $request->getPort(),
            'method' => $request->getMethod(),
            'real_method' => $request->getRealMethod(),
            'url' => $request->url(),
            'uri' => $request->getUri(),
            'accepts_html' => $request->acceptsHtml(),
            'accepts_json' => $request->acceptsJson(),
            'is_json' => $request->isJson(),
            'is_xml' => $request->isXmlHttpRequest(),
            'is_secure' => $request->secure(),
            'is_no_cache' => $request->isNoCache(),
            'locale' => $request->getLocale(),
            'client_ip' => $request->getClientIp(),
            'content' => $request->getContent(),
            'content-type' => $request->getContentType(),
            'encodings' => $request->getEncodings(),
            'scheme' => $request->getScheme(),
            'query' => $request->query(),
            'files' => $request->allFiles()
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function postRequest(Request $request)
    {
        return response()->json([
            'host' => $request->getHost(),
            'port' => $request->getPort(),
            'method' => $request->getMethod(),
            'real_method' => $request->getRealMethod(),
            'url' => $request->url(),
            'uri' => $request->getUri(),
            'accepts_html' => $request->acceptsHtml(),
            'accepts_json' => $request->acceptsJson(),
            'is_json' => $request->isJson(),
            'is_xml' => $request->isXmlHttpRequest(),
            'is_secure' => $request->secure(),
            'is_no_cache' => $request->isNoCache(),
            'locale' => $request->getLocale(),
            'client_ip' => $request->getClientIp(),
            'content' => $request->getContent(),
            'content-type' => $request->getContentType(),
            'encodings' => $request->getEncodings(),
            'scheme' => $request->getScheme(),
            'query' => $request->query(),
            'files' => $request->allFiles()
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function putRequest(Request $request)
    {
        return response()->json([
            'host' => $request->getHost(),
            'port' => $request->getPort(),
            'method' => $request->getMethod(),
            'real_method' => $request->getRealMethod(),
            'url' => $request->url(),
            'uri' => $request->getUri(),
            'accepts_html' => $request->acceptsHtml(),
            'accepts_json' => $request->acceptsJson(),
            'is_json' => $request->isJson(),
            'is_xml' => $request->isXmlHttpRequest(),
            'is_secure' => $request->secure(),
            'is_no_cache' => $request->isNoCache(),
            'locale' => $request->getLocale(),
            'client_ip' => $request->getClientIp(),
            'content' => $request->getContent(),
            'content-type' => $request->getContentType(),
            'encodings' => $request->getEncodings(),
            'scheme' => $request->getScheme(),
            'query' => $request->query(),
            'files' => $request->allFiles()
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function patchRequest(Request $request)
    {
        return response()->json([
            'host' => $request->getHost(),
            'port' => $request->getPort(),
            'method' => $request->getMethod(),
            'real_method' => $request->getRealMethod(),
            'url' => $request->url(),
            'uri' => $request->getUri(),
            'accepts_html' => $request->acceptsHtml(),
            'accepts_json' => $request->acceptsJson(),
            'is_json' => $request->isJson(),
            'is_xml' => $request->isXmlHttpRequest(),
            'is_secure' => $request->secure(),
            'is_no_cache' => $request->isNoCache(),
            'locale' => $request->getLocale(),
            'client_ip' => $request->getClientIp(),
            'content' => $request->getContent(),
            'content-type' => $request->getContentType(),
            'encodings' => $request->getEncodings(),
            'scheme' => $request->getScheme(),
            'query' => $request->query(),
            'files' => $request->allFiles()
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteRequest(Request $request)
    {
        return response()->json([
            'host' => $request->getHost(),
            'port' => $request->getPort(),
            'method' => $request->getMethod(),
            'real_method' => $request->getRealMethod(),
            'url' => $request->url(),
            'uri' => $request->getUri(),
            'accepts_html' => $request->acceptsHtml(),
            'accepts_json' => $request->acceptsJson(),
            'is_json' => $request->isJson(),
            'is_xml' => $request->isXmlHttpRequest(),
            'is_secure' => $request->secure(),
            'is_no_cache' => $request->isNoCache(),
            'locale' => $request->getLocale(),
            'client_ip' => $request->getClientIp(),
            'content' => $request->getContent(),
            'content-type' => $request->getContentType(),
            'encodings' => $request->getEncodings(),
            'scheme' => $request->getScheme(),
            'query' => $request->query(),
            'files' => $request->allFiles()
        ]);
    }
}
