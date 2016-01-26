<?php namespace Elozoya\LaravelCommon;

/*
 * RequestMetaAttributes
 * =====================
 *
 */
class RequestMetaAttributes
{
    public function getMetaAttributes(\Illuminate\Http\Request $request)
    {
        return [
            'meta_ip_address' => $request->ip(),
        ];
    }

    public function getInputAndMetaAttributes(\Illuminate\Http\Request $request)
    {
        $metaAttributes = $this->getMetaAttributes($request);
        $inputAttributes = $request->all();
        return array_merge($metaAttributes, $inputAttributes);
    }
}
