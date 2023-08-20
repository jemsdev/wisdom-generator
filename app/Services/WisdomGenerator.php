<?php

namespace App\Services;

class WisdomGenerator
{
    private const motivations = [
        "Success starts with the first step.",
         "Never give up, because the greatest is ahead.",
         "When you feel tired, rest, not quit.",
         "Positive thinking is the key to achieving dreams.",
         "Failure is only the beginning of greater success.",
         "Only you can turn dreams into reality.",
         "When one door closes, another one will open.",
         "Challenge is an opportunity to grow and develop.",
         "Success is not the end of the journey, but an endless journey.",
         "Patience and hard work will bring the desired results.",
         "If you believe in yourself, you are already halfway to success.",
         "Success is the result of a never-ending struggle.",
         "Be someone who inspires others.",
         "Without difficulties, we would not appreciate success.",
         "There is no limit to what you can achieve.",
         "When you focus on the goal, you will overcome obstacles.",
         "Success is the result of strong determination and tireless hard work.",
         "Don't let doubts get in the way of your steps towards your dreams.",
         "Believe in yourself, you are stronger than you think.",
         "Every day is a new chance to achieve your dreams.",
         "If your plan doesn't work, change your plan, never change your goal.",
         "You are capable of much more than you think if you try.",
         "Never overlook the small steps to a big goal.",
         "Success comes to those who keep trying and never give up.",
         "You are the author of your own life story, so make sure it's a great story.",
         "Don't wait for perfection, start where you are and improve over time.",
         "Failure is a valuable lesson on the way to success.",
         "Always remember why you started, it will keep you focused on your goal.",
         "Difficult is not a reason to quit, but a reason to try harder.",
         "Every day is an opportunity to become a better version of yourself.",
         "Success is the result of dreams, determination, and real action.",
         "You don't know how strong you are until it's the only choice you have.",
         "Life is short, don't waste time chasing your dreams.",
         "Courage is not the absence of fear, but the ability to overcome fear.",
         "You are your own odds maker, so create the odds that lead to success.",
         "Never underestimate the power of a dream, because dreams change the world.",
         "You are closer to your goal today than yesterday, keep moving forward.",
         "Hard work will take you places others can only dream of.",
         "Life is a short journey, so be someone who leaves a meaningful footprint.",
         "You can overcome anything if you persist and believe in yourself.",
         "Never be afraid to fail, because it is from failure that we learn to succeed.",
         "When you stop dreaming, you stop living.",
         "If you want something you've never had, you have to do something you've never done.",
         "Be someone who tries to add value in every situation.",
         "Trust in the process, your journey will take you where you want to go.",
         "There's no such thing as success that comes easy, but it's all worth the effort.",
         "No matter how slow you go, the important thing is you don't stop.",
         "Life is precious, don't waste time on things that aren't important.",
         "If you don't try, you'll never know how far you can go.",
         "Be someone who dares to dream big and take real action to make it happen.",
         "No matter how hard today is, remember that tomorrow is a new opportunity.",
         "Opportunity is never lost, you just have to create it yourself.",
         "Don't let your doubts get in the way of your potential.",
         "Think positive, because the energy you radiate will come back to you.",
         "If you want to change your life, start by changing your thoughts.",
         "Don't be afraid to take risks, because in risk there is opportunity.",
    ];


    public static function generate()
    {
        $randomMotivation = [];
        for ($i = 0; $i <= 4; $i++) {
            $randomMotivation[] = self::motivations[array_rand(self::motivations)];
        }

        return $randomMotivation;
    }
}
