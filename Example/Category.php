<?php
/**
*无限级分类
*/
class Category{
 
    /**
    *无限极分类，压到一个数组
    */
    static function cateToOne($cate, $html='--', $pid=0, $level=0){
        $arr = array();
        foreach($cate as $k =>$v){
            if($v['pid'] == $pid){
                $v['_level'] = $level + 1;
                $v['html'] = str_repeat($html, $level);
                $arr[] = $v;
                unset($cate[$k]);
                $arr = array_merge($arr, self::cateToOne($cate, $html, $v['id'], $level+1));
            }
        }
        return $arr;
    }
     
    /**
    *无限极分类，压成多维数组
    */
    static function cateToArray($cate, $child='child', $pid=0){
        $arr = array();
        foreach($cate as $k => $v){
            if($v['pid']==$pid){
                unset($cate[$k]);
                $v[$child] = self::cateToArray($cate, $child, $v['id']);
                $arr[] = $v;
            }
        }
        return $arr;
    }
     
    /**
    *查找所有父类
    */
    static function getParents($cate, $id){
        $arr = array();
        foreach($cate as $k => $v){
            if($v['id'] == $id){
                $arr[] = $v;
                unset($cate[$k]);
                $arr = array_merge(self::getParents($cate, $v['pid']), $arr);
            }
        }
        return $arr;
    }
     
    /**
    *传递一个父级分类ID返回所有子分类ID
    */
    static function getChildsId($cate, $pid){
        $arr = array();
        foreach($cate as $k => $v){
            if($v['pid']==$pid){
                $arr[] = $v['id'];
                unset($cate[$k]);
                $arr = array_merge($arr, self::getChildsId($cate, $v['id']));
            }
        }
        return $arr;
    }
     
    /**
    *传递一个父级分类ID返回所有子分类
    */
    static function getChilds($cate, $pid){
        $arr = array();
        foreach($cate as $k => $v){
            if($v['pid']==$pid){
                $arr[] = $v;
                unset($cate[$k]);
                $arr = array_merge($arr, self::getChilds($cate, $v['id']));
            }
        }
        return $arr;
    }
}
