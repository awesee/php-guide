<?php

/**
 * 二叉树遍历
 */
class Node {
    public $value;
    public $left;
    public $right;
}

//前序遍历，访问根节点->遍历子左树->遍历右左树
function preorder($root){
    $stack = array();
    array_push($stack, $root);
    while(!empty($stack)){
        $center_node = array_pop($stack);
        echo $center_node->value.' ';
        
        if($center_node->right != null) array_push($stack, $center_node->right);
        if($center_node->left != null) array_push($stack, $center_node->left);
    }
}

//中序遍历，遍历子左树->访问根节点->遍历右右树
function inorder($root){
    $stack = array();
    $center_node = $root;
    while (!empty($stack) || $center_node != null) {
             while ($center_node != null) {
                 array_push($stack, $center_node);
                 $center_node = $center_node->left;
             }
 
             $center_node = array_pop($stack);
             echo $center_node->value . " ";
 
             $center_node = $center_node->right;
         }
}

//后序遍历，遍历子左树->访问子右树->遍历根节点
function postorder($root){
        $pushstack = array();
        $visitstack = array();
        array_push($pushstack, $root);
 
        while (!empty($pushstack)) {
            $center_node = array_pop($pushstack);
            array_push($visitstack, $center_node);
            if ($center_node->left != null) array_push($pushstack, $center_node->left);
            if ($center_node->right != null) array_push($pushstack, $center_node->right);
        }
 
        while (!empty($visitstack)) {
            $center_node = array_pop($visitstack);
            echo $center_node->value. " ";
        }
}
 
//创建如上图所示的二叉树
$a = new Node();
$b = new Node();
$c = new Node();
$d = new Node();
$e = new Node();
$f = new Node();
$a->value = 'A';
$b->value = 'B';
$c->value = 'C';
$d->value = 'D';
$e->value = 'E';
$f->value = 'F';
$a->left = $b;
$a->right = $c;
$b->left = $d;
$c->left = $e;
$c->right = $f;
 
//前序遍历
preorder($a);  //结果是：A B D C E F
inorder($a);  //结果是： D B A E C F
postorder($a); //结果是:  D B E F C A
