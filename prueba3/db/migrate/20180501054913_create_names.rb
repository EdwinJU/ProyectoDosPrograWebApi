class CreateNames < ActiveRecord::Migration[5.1]
  def change
    create_table :names do |t|
      t.string :lastname
      t.string :username
      t.string :password
      t.string :user_type

      t.timestamps
    end
  end
end
