<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

 class NoteController
{
    public function noteApp() {
       return view("noteapp.noteapp");
    }
    public function createNote(Request $req) {
        $insert = DB::insert('insert into note (title, content) values (?, ?)', [$req->title, $req->content]);
        if ($insert) {
            return redirect("/displaynote");
        }else{
            return "Error creating.";
        }
    }
    public function displayNote() {
        $notes = DB::table('note')->get();
        return view("noteapp.displaynote", ["notes" => $notes]);
    //    return view("noteapp.displaynote", [
    //     'allnotes' => "shshhs"
    //    ]);
    }
    public function viewNote($id) {
        $note = DB::select('select * from note where note_id = ?', [$id])[0];
        return view("noteapp.viewnote", ["note" => $note]);
    }
    public function editNote($id) {
        $note = DB::select('select * from note where note_id = ?', [$id])[0];
        return view("noteapp.editnote", ["note" => $note]);
    }
    public function updateNote(Request $req) {
        $note = DB::update('update note set title = ?, content = ?  where note_id = ?', [$req->title, $req->content, $req->id]);
        return redirect("/displaynote");
    }
    public function deleteNote($id) {
        $note = DB::delete('delete from note where note_id = ?', [$id]);
        return redirect("/displaynote");
    }
}