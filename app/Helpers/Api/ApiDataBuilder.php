<?php


namespace App\Helpers\Api;

use Illuminate\Http\JsonResponse;

class ApiDataBuilder
{

    private $data;
    private $update;
    private $emptyListKey;
    private $paginator;

    /**
     * @param $data mixed be passed in 'data' section
     * @return $this to be chained as Builder accessor
     */
    public function data($data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @param $paginator mixed to be passed in 'pagination' section
     * @return $this to be chained as Builder accessor
     */
    public function paginator($paginator)
    {
        $this->paginator = $paginator;
        return $this;
    }

    /**
     * @param $update mixed to be passed in 'update' section
     * @return $this to be chained as Builder accessor
     */
    public function update($update)
    {
        $this->update = $update;
        return $this;
    }

    /**
     * @param $key mixed key of API_EMPTY_IMAGE array
     * @return $this to be chained as Builder accessor
     */
    public function emptyListKey($key)
    {
        $this->emptyListKey = $key;
        return $this;
    }

    /**
     * Apply previously chained arguments into resultant json response
     *
     * @return JsonResponse build api json result
     */
    public function get()
    {
        $partials = ['success' => true, 'data' => $this->data];
        if (isset($this->update) && $this->update != null) {
            $partials['update'] = $this->update;
        }
        if (isset($this->paginator)) {
            $partials['pagination'] = apiPagination($this->paginator);
        }
        if (isset($this->emptyListKey)) {
            $partials['empty_list'] = [
                'image' => url(API_EMPTY_IMAGE[$this->emptyListKey]['image']),
                'message' => API_EMPTY_IMAGE[$this->emptyListKey]['message']
            ];
        }
        return response()->json($partials);
    }

}
