<?php
interface Workable
{
    public function work();
}
class Programmer implements Workable
{
    public function work()
    {
        return 'coding';
    }
}
class Tester implements Workable
{
    public function work()
    {
        return 'testing';
    }
}
class Devops implements Workable
{
    public function work()
    {
        return 'deploy';
    }
}
class ProjectManagement
{
    public function process(Workable $member)
    {
        return $member->work();
    }
}

$pm = new ProjectManagement();
$pg = new Programmer();
$ts = new Tester();
$do = new Devops();

$member1 = $pg;
$member2 = $ts;
$member3 = $do;

$res1 = $pm->process( $member1);
$res2 = $pm->process( $member2);
$res3 = $pm->process( $member3);

var_dump($res1);
var_dump($res2);
var_dump($res3);

