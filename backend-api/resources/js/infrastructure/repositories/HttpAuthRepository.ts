import { User } from '@/domain/entities/User';
import { AuthRepository } from '@/domain/repositories/AuthRepository';
import { useHttp } from '@/composables/useHttp'

export class HttpAuthRepository implements AuthRepository {
   
  private httpRequest = useHttp().httpRequest

  async login(email: string, password: string): Promise<User> {
  
    const data = await this.httpRequest<{ data: any }>('/api/login', 'POST', { email, password })

    return new User(
      data.data.id, 
      data.data.name, 
      data.data.email, 
      data.data.token
    );    
  }
}