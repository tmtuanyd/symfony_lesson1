<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CommentControl extends AbstractController
{
    /**
     * @Route("/comments/{id}/vote/{direction}")
     */
    public function commentVote($id, $direction)
    {
        //to use id to query database

        if($direction === 'up'){
            $currentVoteCount = rand(7,100);
        } else {
            $currentVoteCount = rand(0,5);
        }

        return $this->json(['vote'=>$currentVoteCount]);
    }
}