@extends('layouts.app')

@section('content')
    <div class="container">

    <?php
            function  build_tree($cats,$parent_id = 0){
                if(is_array($cats) && count($cats[$parent_id])>0){
                    $tr = '<ul>';
                    foreach($cats[$parent_id] as $cat){
                        $tr .= '<li>'.$cat['full_name'];
                        $tr .=  build_tree($cats,$cat['id']);
                        $tr .= '</li>';
                    }
                    $tr .= '</ul>';
                }
                else return null;
                return $tr;
            }

        echo @build_tree($tree); ?>

    </div>
@endsection
