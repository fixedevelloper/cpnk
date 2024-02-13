<?php


namespace App\Helpers;


use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class Helper
{

    const per_page=10;
    public static function upload(string $dir, string $format, $image = null)
    {
        if ($image != null) {
            $imageName = \Carbon\Carbon::now()->toDateString() . "-" . uniqid() . "." . $format;
            if (!Storage::disk('public')->exists($dir)) {
                Storage::disk('public')->makeDirectory($dir);
            }
            Storage::disk('public')->put($dir . $imageName, file_get_contents($image));
        } else {
            $imageName = 'def.png';
        }

        return $imageName;
    }
    public static function calculMemberIn24Hour($id)
    {
        $start = Carbon::today()->setTime(1, 00, 00)->format("Y-m-d h:i:s");
        $user = User::query()->firstWhere(['id_contract' => $id]);
        $end = Carbon::today()->addDays(1)->format("Y-m-d h:i:s");
        $totalUp = User::query()->where(['address_parent' => $user->address_parent])->whereBetween("created_at", [$start, $end])
            ->count();
        $users = User::all();
    }
    public static function getTotalMonth($date)
    {
        return Carbon::parse($date)->diffInMonths(Carbon::today());
    }
    public static function getTotalDays($date)
    {
        $now=new \DateTime('now');
        $date_=new \DateTime($date);
        return $now->diff($date_)->days;
    }
    public static function getPourcentage($amount)
    {
        if ($amount>0 && $amount<=500000){
            return 1.5;
        }elseif ($amount>=500001){
            return 3.5;
        }else{
            return 0;
        }

    }
}
