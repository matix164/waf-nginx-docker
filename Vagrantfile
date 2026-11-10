Vagrant.configure("2") do |config|
  config.vm.box = "bento/ubuntu-22.04"
  
  config.vm.network "forwarded_port", guest: 8080, host: 8080
  config.vm.network "forwarded_port", guest: 9090, host: 9090
  
  config.vm.provider "virtualbox" do |v|
    v.memory = "2048"
    v.cpus = 2
    v.gui = false
  end
  
  config.vm.provision "shell", inline: <<-SHELL
    apt-get update
    apt-get install -y docker.io docker-compose
    cd /vagrant
    docker-compose up -d
  SHELL
end
