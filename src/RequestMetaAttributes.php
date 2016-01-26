<?php namespace Elozoya\LaravelCommon;

/*
 * RequestMetaAttributes
 * =====================
 *
 */
class RequestMetaAttributes
{
    public function getMetaAttributes()
    {
        return [
            'meta_ip_address' => \Illuminate\Support\Facades\Request::ip(),
        ];
    }

    public function getInputAndMetaAttributes()
    {
        $metaAttributes = $this->getMetaAttributes();
        $inputAttributes = \Illuminate\Support\Facades\Request::all();
        return array_merge($metaAttributes, $inputAttributes);
    }
}
