<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | ان following language lines contain ان default error messages used by
    | ان validator class. Some of these rules have multiple versions such
    | as ان size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'ينقصك البيان  :attribute حتى نتمكن من قبول طلبك.',
    'active_url' => 'إن الببيان  :attribute ليس موجودا.',
    'after' => 'ان  :attribute يجب ان يكون تاريخ ويكون بعد  :date.',
    'after_or_equal' => 'ان :attribute يجب ان يكون تاريخا و ان يكون من بعد  :date.',
    'alpha' => 'ان :attribute يجب ان يحتوي على حروف فقط.',
    'alpha_dash' => 'ان :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'ان :attribute يجب ان يحتوي على حروف و ارقام فقط.',
    'array' => 'ان  :attribute يجب ان يكون مصفوفة خطية.',
    'before' => 'ان :attribute يجب ان يكون تاريخا و ان يكون من قبل  :date.',
    'before_or_equal' => 'ان :attribute يجب ان يكون تاريخا و ان يكون من قبل او في نفس ميعاد  :date.',
    'between' => [
        'numeric' => 'ان :attribute يجب ان يكون بين :min and :max.',
        'file' => 'ان :attribute  يجب ان يكون بين القيمة :min و :max كيلوبايت.',
        'string' => 'ان :attribute يجب ان يكون بين القيمة :min و :max حرف.',
        'array' => 'ان :attribute يجب ان يكون بين القيمة :min و :max عنصر.',
    ],
    'boolean' => 'ان :attribute يجب ان يكون بولوني.',
    'confirmed' => 'ان :attribute لا يتوافق مع التأكيد.',
    'date' => 'ان :attribute ليس تاريخ صالح.',
    'date_equals' => 'ان :attribute يجب ان يكون تاريخ من :date.',
    'date_format' => 'ان :attribute لا يتوافق مع الصيغة :format.',
    'different' => 'ان :attribute و :other يجب ان يكونا مختلفين.',
    'digits' => 'ان :attribute يجب ان يتكمون من :digits حروف عددية.',
    'digits_between' => 'ان :attribute يجب ان تتراوح قيمته بين :min و :max حروف عددية.',
    'dimensions' => 'ان :attribute لديه ابعاد غير صالحة للصورة.',
    'distinct' => 'ان :attribute لديه قيمة مكررة.',
    'email' => 'ان :attribute يجب ان يكون عنوان بريد الكتروني صالح.',
    'ends_with' => 'ان :attribute يجب ان ينتهي بواحدة مما يلي : :values',
    'exists' => 'ان :attribute المختار غير صالح',
    'file' => 'ان :attribute يجب ان يكون من النوع ملف.',
    'filled' => 'ان :attribute يجب ان يكون له قيمة.',
    'gt' => [
        'numeric' => 'ان :attribute يجب ان يكون اكبر من :value.',
        'file' => 'ان :attribute يجب ان يكون اكبر من :value كيلوبايت.',
        'string' => 'ان :attribute يجب ان يكون اكبر من :value حرف.',
        'array' => 'ان :attribute يجب ان يكون لديه أكثر من :value عنصر.',
    ],
    'gte' => [
        'numeric' => 'ان :attribute يجب ان يكون اكبر من او يساوي :value.',
        'file' => 'ان :attribute يجب ان يكون اكبر من او يساوي :value كيلوبايت.',
        'string' => 'ان :attribute يجب ان يكون اكبر من  او يساوي :value حرف.',
        'array' => 'ان :attribute يجب ان يكون لديه :value عنصر او اكثر.',
    ],
    'image' => 'ان :attribute يجب ان تكون صورة.',
    'in' => 'ان selected :attribute غير صالحة.',
    'in_array' => 'ان :attribute غير موجودة في :other.',
    'integer' => 'ان :attribute يجب ان تكون an integer.',
    'ip' => 'ان :attribute يجب ان تكون عنوان IP صالح.',
    'ipv4' => 'ان :attribute يجب ان تكون عنوان IPv4 صالح.',
    'ipv6' => 'ان :attribute يجب ان تكون IPv6 صالح.',
    'json' => 'ان :attribute يجب ان تكون عبارة JSON صالحة.',
    'lt' => [
        'numeric' => 'ان :attribute يجب ان يكون اصغر من :value.',
        'file' => 'ان :attribute يجب ان يكون اصغر من :value كيلوبايت.',
        'string' => 'ان :attribute يجب ان يكون اصغر من :value حرف.',
        'array' => 'ان :attribute يجب ان يكون لديه اصغر من :value عنصر.',
    ],
    'lte' => [
        'numeric' => 'ان :attribute يجب ان يكون اصغر من او يساوي :value.',
        'file' => 'ان :attribute يجب ان يكون اصغر من او يساوي :value كيلوبايت.',
        'string' => 'ان :attribute يجب ان يكون اصغر من او يساوي :value حرف.',
        'array' => 'ان :attribute لا يجب ان تمتلك أكثر من عنصر :value .',
    ],
    'max' => [
        'numeric' => 'ان :attribute لا يجب ان تكون اكبر من :max.',
        'file' => 'ان :attribute لا يجب ان تكون اكبر من :max كيلوبايت.',
        'string' => 'ان :attribute لا يجب ان تكون اكبر من :max حرف.',
        'array' => 'ان :attribute لا يجب ان تمتلك أكثر من :max عنصر.',
    ],
    'mimes' => 'ان :attribute يجب ان تكون a file of type: :values.',
    'mimetypes' => 'ان :attribute يجب ان تكون a file of type: :values.',
    'min' => [
        'numeric' => 'ان :attribute يجب ان تكون على الاقل :min.',
        'file' => 'ان :attribute يجب ان تكون على الاقل :min كيلوبايت.',
        'string' => 'ان :attribute يجب ان تكون على الاقل :min حرف.',
        'array' => 'ان :attribute يجب ان يكون لديه على الاقل :min عنصر.',
    ],
    'not_in' => 'ان المختار :attribute غير صالحة.',
    'not_regex' => ' ان تنسيق :attribute غير صالح.',
    'numeric' => 'ان :attribute يجب ان تكون رقم.',
    'present' => 'ان :attribute يجب ان تكون موجودة.',
    'regex' => 'ان صيغة :attribute غير صالحة.',
    'required' => 'ان :attribute ضروري.',
    'required_if' => 'ان :attribute ضروري عندما :other يكون :value.',
    'required_unless' => 'ان :attribute  ضروري اذ لم :other يكون من ضمن القيم :values.',
    'required_with' => 'ان :attribute ضروري عندما :values تكون حاضرة .',
    'required_with_all' => 'ان :attribute ضروري عندما :values تكون حاضرة.',
    'required_without' => 'ان :attribute field ضروري عندما :values تكون غير حاضرة.',
    'required_without_all' => 'ان :attribute ضروري عندما لا تكون اي من :values حاضرة.',
    'same' => 'ان :attribute و :other يجب ان يتطابقوا.',
    'size' => [
        'numeric' => 'ان :attribute يجب ان تكون :size.',
        'file' => 'ان :attribute يجب ان تكون :size كيلوبايت.',
        'string' => 'ان :attribute يجب ان تكون :size حرف.',
        'array' => 'ان :attribute must contain :size عنصر.',
    ],
    'starts_with' => 'ان :attribute يجب ان يبدأ بإحدى القيم الاتية : :values',
    'string' => 'ان :attribute يجب ان تكون عبارة.',
    'timezone' => 'ان :attribute يجب ان تكون منطقة زمنية صالحة.',
    'unique' => 'ان :attribute مأخوذ من قبل.',
    'uploaded' => 'ان :attribute فشل في الرفع.',
    'url' => 'ان :attribute format غير صالحة.',
    'uuid' => 'ان :attribute يجب ان تكون UUID صالح.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using ان
    | convention "attribute.rule" to name ان lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | ان following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail عنوان" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
