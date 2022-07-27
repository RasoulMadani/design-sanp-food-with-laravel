<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Cart;
use App\Models\CartItem;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Http\Requests\Api\Comments\GetCommentsRequest;
use Illuminate\Http\Request;
use App\Http\Resources\Api\Comments\GetCommentsResourse;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getComments(GetCommentsRequest $request)
    {
        $validated = $request->validated();
        $searchCase = '';
        if (isset($validated['restaurant_id'])) {
            $searchCase = 'restaurant_id';
        } elseif (isset($validated['ghaza_id'])) {
            $searchCase = 'ghaza_id';
        }
        $cartItem = Cart::with([
            'comments', 'cartItems' => function ($q) use ($validated, $searchCase) {
                $q->select('id', 'cart_id', 'menu_id', 'quantity', 'unit_price', 'status');
                $q->with(['menu' => function ($q) use ($validated, $searchCase) {
                    $q->where($searchCase, '=', $validated[$searchCase]);
                    $q->select('id', 'ghaza_id');
                    $q->with(['ghaza' => function ($q) {
                        $q->select('id', 'name', 'user_id');
                    }]);
                }]);
            }
        ])->with(['user' => function ($q) {
            $q->with(['addresses' => function ($q) {
                $q->select('textAddress');
            }]);
            $q->with(['phones' => function ($q) {
                $q->select('phoneNumber');
            }]);
        }])->get(['id', 'user_id']);
        $coll = GetCommentsResourse::collection($cartItem);
        // $coll = $coll->filter()->all();
        return response()->json(['allah' => 'perform', 'comments' => $coll], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCommentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommentRequest $request)
    {
        try {
            $validatedData = $request->validated();
            $comment = new Comment;
            $comment->body = $validatedData['message'];
            $comment->score = $validatedData['score'];
            $comment->user_id = auth()->user()->id;
            $cart = Cart::find($validatedData['cart_id']);
            $cart->comments()->save($comment);
            return response()->json(['allah' => 'perform'], 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage());
        }
    }
    public function replyStore(Request $request)
    {
        $reply = new Comment();
        $reply->body = $request->get('comment_body');
        $comment->score = $request->get('score');
        $reply->user()->associate($request->user());
        $reply->parent_id = $request->get('comment_id');
        $cart = Cart::find($request->get('cart_id'));

        $cart->comments()->save($reply);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommentRequest  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommentRequest $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
