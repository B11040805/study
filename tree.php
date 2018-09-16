<?php
/**
 * Created by PhpStorm.
 * User: chenjiajia
 * Date: 2017/11/2
 * Time: 下午9:11
 */

class TreeNode {
    public $root;
    public  $childNode;
    public function __construct($root)
    {
        $this->root = $root;
    }

    public function addTreeNode(TreeNode $node) {
        $this->childNode[] = $node;
    }
}



class myTree {

    public function BFS(TreeNode $root) {
        if (empty($root->root)) {
            return;
        }
        // 使用队列，
        $queueArr[] = $root;
        while(!empty($queueArr)) {
            $tempNode = array_pop($queueArr);
            print $tempNode->root;
            if (!empty($tempNode->childNode)) {
                foreach ($tempNode->childNode as $item) {
                    array_unshift($queueArr, $item);
                }
            }
        }
    }

    public function preOrder(TreeNode $root) {
        if (empty($root->childNode)) {
            return;
        }
        print $root->root;
        foreach ($root->childNode as $item) {
            $this->preOrder($item);
        }

    }

}
$test = new myTree();
// 初始化
$root = new TreeNode("a");
$node1 = new TreeNode('b');
$node2 = new TreeNode('c');
$node3 = new TreeNode('d');
$root->addTreeNode($node1);
$root->addTreeNode($node2);
$root->addTreeNode($node3);

$node4 = new TreeNode('e');
$node5 = new TreeNode('f');
$node6 = new TreeNode('g');
$node1->addTreeNode($node4);
$node1->addTreeNode($node5);
$node1->addTreeNode($node6);

$node7 = new TreeNode('h');
$node8 = new TreeNode('i');
$node9 = new TreeNode('j');
$node2->addTreeNode($node7);
$node2->addTreeNode($node8);
$node2->addTreeNode($node9);

$test->BFS($root);


//脚本正常退出
exit(0);
