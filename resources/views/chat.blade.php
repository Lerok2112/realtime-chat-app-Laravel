<style>
   h5 {
    padding-top: 50px; 
    padding-left: 10px;
   }
  </style>
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Chat</div>

                <div class="panel-body">
                    
                <?echo Auth::user()->created_at->format('d.m.Y H:i:s');?>
                    <chat-messages :messages="messages"></chat-messages>
                    
                </div>
                <div class="panel-footer">
                    <chat-form
                        v-on:messagesent="addMessage"
                        :user="{{ Auth::user() }}"
                    ></chat-form>
                </div>
            </div>
        </div>
    </div>
    
</div> 
<h5 >Курсовая работа: Овсейчук В., ПО-3</h5>
@endsection