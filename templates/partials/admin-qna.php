<h2>QNA</h2>
<br>
<?php
require_once('C:/xampp/htdocs/Cookie_Projekt/_inc/classes/Qna.php');

$qna_object = new Qna();
$qna = $qna_object->select();

if(isset($_POST['delete_qna'])){
    $qna_id = $_POST['delete_qna'];
    $qna_object->delete($qna_id);
    header('Location: admin.php');
    exit();
}

if(isset($_POST['edit_qna_submit'])){
    $qna_id = $_POST['qna_id'];
    $edited_question = $_POST['edited_question'];
    $edited_answer = $_POST['edited_answer'];
    $qna_object->edit($qna_id, array('question' => $edited_question, 'answer' => $edited_answer));
    header('Location: admin.php');
    exit();
}

echo '<table class="admin-table">';
echo '<tr>
        <th>Question</th>
        <th class="answer-column">Answer</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>';
foreach($qna as $q){
    echo '<tr>';
    echo '<td>'.$q->question.'</td>';
    echo '<td>'.$q->answer.'</td>';
    echo '<td>
            <form action="" method="POST">
                <input type="hidden" name="qna_id" value="'.$q->id.'">
                <button type="submit" class="edit-btn" name="edit_qna" value="'.$q->id.'">Edit</button>
            </form>
          </td>';
    echo '<td>
            <form action="" method="POST">
                <button type="submit" class="delete-btn" name="delete_qna" value="'.$q->id.'">Delete</button>
            </form>
          </td>';
    echo '</tr>';
}
echo '</table>';

if(isset($_POST['edit_qna'])) {
    $qna_id = $_POST['edit_qna'];
    $qna_data = $qna_object->select_single($qna_id);
    echo '<form action="" method="POST">'; 
    echo '<input type="hidden" name="qna_id" value="'.$qna_id.'">';
    echo '<input type="text" name="edited_question" value="'.$qna_data->question.'" placeholder="Edit Question"><br>';
    echo '<textarea name="edited_answer" placeholder="Edit Answer">'.$qna_data->answer.'</textarea><br>';
    echo '<input type="submit" name="edit_qna_submit" value="Save Changes">';
    echo '</form>';
}
?>
