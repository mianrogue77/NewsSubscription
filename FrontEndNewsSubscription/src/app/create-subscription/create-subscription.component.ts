import { Component, OnInit } from '@angular/core';
import { User } from '../interfaces/user';
import { UsersService } from '../services/users.service'

@Component({
  selector: 'app-create-subscription',
  templateUrl: './create-subscription.component.html',
  styleUrls: ['./create-subscription.component.css']
})
export class CreateSubscriptionComponent implements OnInit {
  
  user: User = {
    name: null,
    email:null,
    password: null
  };

  constructor(private userService: UsersService) { 
    
  }

  ngOnInit() {
  }

  saveUser() {
    this.userService.save(this.user).subscribe((data) => {
      alert('Usuario guardado');
      console.log(data);
    }, (error) => {
      console.log(error);
      alert('Ocurrió un error');
    });
  }

}
