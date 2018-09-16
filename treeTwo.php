<?php
/**
 * Created by PhpStorm.
 * User: chenjiajia
 * Date: 2017/11/2
 * Time: 下午9:11
 */

class TreeNode {
    public $root;
    public $leftNode;
    public $rigthNode;

    public function __construct($root, TreeNode $leftNode = null, TreeNode $rightNode = null)
    {
        $this->root = $root;
        $this->leftNode = $leftNode;
        $this->rigthNode = $rightNode;
    }

}



class myTree {

    public function BFS(TreeNode $root) {

    }

    public function preOrder(TreeNode $root) {
        if (empty($root->root)) {
            return;
        }
        print $root->root;
        if (!empty($root->leftNode)) {
            $this->preOrder($root->leftNode);
        }
        if (!empty($root->rigthNode)) {
            $this->preOrder($root->rigthNode);
        }
    }

    public function inOrder(TreeNode $root) {
        if (empty($root->root)) {
            return;
        }

        if (!empty($root->leftNode)) {
            $this->inOrder($root->leftNode);
        }
        print $root->root;
        if (!empty($root->rigthNode)) {
            $this->inOrder($root->rigthNode);
        }
    }

    public function afterOrder(TreeNode $root) {
        if (empty($root->root)) {
            return;
        }

        if (!empty($root->leftNode)) {
            $this->afterOrder($root->leftNode);
        }

        if (!empty($root->rigthNode)) {
            $this->afterOrder($root->rigthNode);
        }
        print $root->root;
    }
}

$test = new myTree();
// 初始化
$node4 = new TreeNode('d');
$node5 = new TreeNode('e');
$node6 = new TreeNode('f');
$node2 = new TreeNode('b', $node4, $node5);
$node3 = new TreeNode('c', $node6);

$root = new TreeNode("a",$node2, $node3);


$test->preOrder($root);


//脚本正常退出
exit(0);
