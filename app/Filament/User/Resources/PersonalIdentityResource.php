<?php

namespace App\Filament\User\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\PersonalIdentity;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Illuminate\Support\Facades\Auth;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\User\Resources\PersonalIdentityResource\Pages;
use App\Filament\User\Resources\PersonalIdentityResource\RelationManagers;

class PersonalIdentityResource extends Resource
{
    protected static ?string $model = PersonalIdentity::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function userHasPersonalIdentity(): bool
    {
        $userId = Auth::id();
        return PersonalIdentity::where('users_id', $userId)->exists();
    }

    public static function form(Form $form): Form
    {
        $userId = Auth::id();

        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('users_id')->default($userId),
                        TextInput::make('agama'),
                        TextInput::make('alamat'),
                        TextInput::make('berlaku_hingga'),
                        TextInput::make('golongan_darah'),
                        TextInput::make('jenis_kelamin'),
                        TextInput::make('kecamatan'),
                        TextInput::make('kelurahan_desa'),
                        TextInput::make('kewarganegaraan'),
                        TextInput::make('kota_kabupaten'),
                        TextInput::make('nama_ktp'),
                        TextInput::make('nik'),
                        TextInput::make('pekerjaan'),
                        TextInput::make('provinsi'),
                        TextInput::make('rt_rw'),
                        TextInput::make('status_perkawinan'),
                        TextInput::make('tanggal_lahir'),
                        TextInput::make('ktp_image_file'),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('users_id'),
                TextColumn::make('agama'),
                TextColumn::make('alamat'),
                TextColumn::make('berlaku_hingga'),
                TextColumn::make('golongan_darah'),
                TextColumn::make('jenis_kelamin'),
                TextColumn::make('kecamatan'),
                TextColumn::make('kelurahan_desa'),
                TextColumn::make('kota_kabupaten'),
                TextColumn::make('kewarganegaraan'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPersonalIdentities::route('/'),
            'create' => Pages\CreatePersonalIdentity::route('/create'),
            'edit' => Pages\EditPersonalIdentity::route('/{record}/edit'),
        ];
    }

}
