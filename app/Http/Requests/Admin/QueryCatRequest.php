<?php

// +----------------------------------------------------------------------
// | date: 2015-07-12
// +----------------------------------------------------------------------
// | QueryCatRequest.php: 后端查询工具分类表单验证
// +----------------------------------------------------------------------
// | Author: yangyifan <yangyifanphp@gmail.com>
// +----------------------------------------------------------------------

namespace App\Http\Requests\Admin;

use App\Http\Requests\BaseFormRequest;

class QueryCatRequest extends BaseFormRequest {

    /**
     * 验证错误规则
     *
     * @return array
     */
    public function rules(){
        return [
            'cat_name'  => ['required', 'unique:query_cat'],
            'status'    => ['required', 'in:1,2'],
            'sort'      => ['required', 'digits_between:0,255'],
        ];
    }

    /**
     * 验证错误提示
     *
     * @return array
     */
    public function messages(){
        return [
            'cat_name.required'     => trans('validate.cat_name_require'),
            'cat_name.unique'       => trans('validate.cat_unique'),
            'status.required'       => trans('validate.status_require'),
            'status.in'             => trans('validate.status_error'),
            'sort.require'          => trans('validate.sort_require'),
            'sort.digits_between'   => trans('validate.sort_error')
        ];
    }

}
