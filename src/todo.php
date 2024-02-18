<?php
App::uses('AppModel', 'Model');

class Todo extends AppModel {
    public $belongsTo = array(
        'Priority' => array(
            'className' => 'Priority',
            'foreignKey' => 'priority_id'
        )
    );

    public $validate = array(
        'name' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'タスク名は必須です'
            ),
            'maxLength' => array(
                'rule' => array('maxLength', 20),
                'message' => 'タスク名は最大20文字です'
            )
        ),
        'detail' => array(
            'maxLength' => array(
                'rule' => array('maxLength', 200),
                'message' => '内容は200文字までです'
            )
        )
    );
}
