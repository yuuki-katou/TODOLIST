<?php
echo $this->Form->create('Todo');
echo $this->Form->input('name', array('label' => 'タスク名'));
echo $this->Form->input('priority_id', array(
    'label' => '優先度',
    'options' => $priorities,
    'type' => 'select',
    'empty' => '選択してください'
));
echo $this->Form->input('due', array('label' => '期限', 'type' => 'date'));
echo $this->Form->input('detail', array('label' => '内容', 'type' => 'textarea'));
echo $this->Form->end('内容を確認');
