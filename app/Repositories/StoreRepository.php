<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Requests;
use App\Store;
use App\Http\Requests\StoreRequest;

class StoreRepository
{
    public function all()
    {
        return Store::paginate(config('pagination.store'));
    }

    public function findOrFail($id)
    {
        return Store::findOrFail($id);
    }

    public function add(StoreRequest $request)
    {
        $store = new Store;
        $validated = $request->validated();
        $store->name = $request->name;
        $store->description = $request->description;
        $store->address = $request->address;
        if($request->hasFile('avatar'))
        {
            $file = $request->file('avatar');
            $name = $file->getClientOriginalName();
            $avatar = str_random(4) . '_' . $name;
            while (file_exists("upload/store/" . $avatar)) 
            {
                $avatar = str_random(4) . '_' . $name;
            }
            $file->move(config('setting.avatar.store'), $avatar);
            $store->avatar = $avatar;
        }
        else
        {
            $store->avatar = '';
        }
        $store->save();
    }
    public function update(StoreRequest $request, $id)
    {
        $store = Store::findOrFail($id);
        $validated = $request->validated();
        $store->name = $request->name;
        $store->description = $request->description;
        $store->address = $request->address;
        if($request->hasFile('avatar'))
        {
            $file = $request->file('avatar');
            $name = $file->getClientOriginalName();
            $avatar = str_random(4) . '_' . $name;
            while (file_exists("upload/store/" . $avatar)) 
            {
                $avatar = str_random(4) . '_' . $name;
            }
            $file->move(config('setting.avatar.store'), $avatar);
            $store->avatar = $avatar;
        }
        else
        {
            $store->avatar = '';
        }
        $store->save();
    }

    public function delete($id)
    {
        $this->findOrFail($id)->delete();

        return true;
    }
}
