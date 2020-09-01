<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVoteRequest;
use Illuminate\Http\Request;
use App\Repositories\VoteRepository;
use Flash;
use Response;

class BasicPagesController extends Controller
{
    /** @var  VoteRepository */
    private $voteRepository;

    public function __construct(VoteRepository $voteRepo)
    {
        $this->voteRepository = $voteRepo;
    }
    //
    public function contacts(){

        return view('pages.contacts');
    }

    public function contact_form(CreateVoteRequest $request){
        $input = $request->all();

        $vote = $this->voteRepository->create($input);

        Flash::success('Сообщение отправлено.');

        return redirect(route('pages.contacts'));
    }
}
