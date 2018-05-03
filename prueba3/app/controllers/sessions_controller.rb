class SessionsController < ApplicationController
  require 'digest/md5'
  # POST /sessions
  def create
   #Verifica si existe el usuario en la base de datos
    #byebug
    username = session_params[:username]
    password = session_params[:password]
    password = Digest::MD5.hexdigest(password)
    user = User.where(username: username,password: password).first
  if user
    #Genera el token
      token = Digest::MD5.hexdigest(username)
      #Crea la session
      session = Session.new(token: token)
      session.user = user
    if session.save
      render json: "token: #{token}".to_json, status: :created
      end
    end
  end
  # DELETE /sessions/1
  def destroy
    @session.destroy
  end

  private
    # Use callbacks to share common setup or constraints between actions.
    def set_session
      @session = Session.find(params[:id])
    end

    # Only allow a trusted parameter "white list" through.
    def session_params
      params.permit(:username, :password)    
    end
end
