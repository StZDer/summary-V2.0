<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $red) // добавление записи
    {
        $contact = new Contact();
        $contact->name = $red->input('name');
        $contact->email = $red->input('email');
        $contact->subject = $red->input('subject');
        $contact->message = $red->input('message');

        $contact->save();

        return redirect()->route('contact-all')->with('success', 'Сообщение было добавлено');
    }
    public function allData() // чтение записи
    {
        return view('contact.messages', ['data' => Contact::all()]);
    }
    public function moreData($id) // Передает динамический id записи
    {
        $more = new Contact();
        return view('contact.contact-more', ['data' => $more->find($id)]);
    }
    public function editFormData($id) // Изменение записи
    {
        $editFormData = new Contact();
        return view('contact.contact-form-edit', ['data' => $editFormData->find($id)]);
    }
    public function editData($id, ContactRequest $red) // редактирование записи
    {
        $contact = Contact::find($id);
        $contact->name = $red->input('name');
        $contact->email = $red->input('email');
        $contact->subject = $red->input('subject');
        $contact->message = $red->input('message');

        $contact->save();

        return redirect()->route('contact-all')->with('success', 'Сообщение было изменено');
    }
    public function deleteData($id) // Удаление записи
    {
        Contact::find($id)->delete();
        return redirect()->route('contact-all')->with('delete', 'Сообщение было удаленно');
    }
}
