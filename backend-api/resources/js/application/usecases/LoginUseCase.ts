import { AuthRepository } from "@/domain/repositories/AuthRepository";
import { User } from "@/domain/entities/User";

export class LoginUseCase {
  constructor(private repo: AuthRepository) {}

  async execute(email: string, password: string): Promise<User> {
    if (!email || !password) {
      throw new Error("Email y contraseña son requeridos.");
    }
    return await this.repo.login(email, password);
  }
}
